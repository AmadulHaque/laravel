import React, { useEffect, useState, useRef } from 'react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';

import MediaHandler from '@/Components/MediaHandler';

export default function VideoChat({ auth }) {
    const [localStream, setLocalStream] = useState(null);
    const [error, setError] = useState(null);
    const localVideoRef = useRef(null);

    useEffect(() => {
        const mediaHandler = new MediaHandler();

        const getMediaPermissions = async () => {
            try {
                const stream = await mediaHandler.getPermissions();
                setLocalStream(stream);

                // Assign the local stream to the video element
                if (localVideoRef.current) {
                    localVideoRef.current.srcObject = stream;
                }
            } catch (error) {
                setError(error.message);
            }
        };

        getMediaPermissions();

        console.log(localVideoRef);

        // Clean up the media stream when the component unmounts
        return () => {
            if (localStream) {
                localStream.getTracks().forEach((track) => {
                    track.stop();
                });
            }
        };
    }, []);

    return (
        <AuthenticatedLayout user={auth.user} header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>}>
            <Head title="Video-Chat" />
            <div className="py-12">
                <div>
                    {error && <div>Error: {error}</div>}
                    {localStream && (
                        <div>
                            <h2>Local Video</h2>
                            <video id="localVideo" ref={localVideoRef} autoPlay playsInline />
                        </div>

                         
                    )}
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
