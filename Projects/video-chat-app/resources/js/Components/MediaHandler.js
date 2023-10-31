export default class MediaHandler {
    async getPermissions({ video = true, audio = true } = {}) {
        try {
            const stream = await navigator.mediaDevices.getUserMedia({ video, audio });
            return stream;
        } catch (error) {
            throw new Error(`Unable to fetch stream: ${error.message}`);
        }
    }
}
