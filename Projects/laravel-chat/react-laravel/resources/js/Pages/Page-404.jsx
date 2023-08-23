import React,{Suspense,lazy} from 'react';
import LazyLoader from "../Layout/LazyLoader";
const  P404 = lazy(()=>import('../Components/NotFound/NotFound'));

const Page404 = () => {
    return (
        <div>
            <Suspense fallback={<LazyLoader/>}>
                <P404/>
            </Suspense>
        </div>
    );
};

export default Page404;