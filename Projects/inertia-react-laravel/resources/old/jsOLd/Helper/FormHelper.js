import toast from 'react-hot-toast';

let EmailRegx = /\S+@\S+\.\S+/;
let MobileRegx = /(^(\+88|0088)?(01){1}[3456789]{1}(\d){8})$/;

class FormHelper {
    IsEmpty(value) {
        return value.length === 0;
    }
    IsMobile(value){
        return MobileRegx.test(value);
    }
    IsEmail(value) {
        return !EmailRegx.test(value);
    }
    ErrorToast(msg) {
        toast.error(msg, { position: "top-center" });
    }
    SuccessToast(msg) {
        toast.success(msg, { position: "top-center" });
    }
    InfoToast(msg) {
        toast.info(msg, { position: "top-center" });
    }
   
}
export const {IsEmpty, IsMobile, IsEmail, ErrorToast, SuccessToast,InfoToast} = new FormHelper();