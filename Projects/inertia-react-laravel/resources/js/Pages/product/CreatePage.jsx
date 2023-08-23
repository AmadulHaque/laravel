import {useState ,useRef} from 'react';
import 'react-toastify/dist/ReactToastify.css';
import { Inertia } from '@inertiajs/inertia';
import {ErrorToast, IsEmpty,SuccessToast} from "../../Helper/FormHelper";
import MasterLayout from '../../Componnets/MasterLayout/MasterLayout';

export default function CreatePage() {
const [name, setName] = useState('');
const [description, setDescription] = useState('');
const [price, setPrice] = useState('');
const [qty, setQty] = useState('');
const [image, setImage] = useState();
const [status, setStatus] = useState();

const formData = new FormData();
  formData.append('name', name);
  formData.append('description', description);
  formData.append('price', price);
  formData.append('qty', qty);
  formData.append('image', image);
  formData.append('status', status);

  const submit = (e) => {
  e.preventDefault();
      Inertia.post('/product/store', formData, {
        headers: {
        'Content-Type': 'multipart/form-data',
        },
        onError: (errors) => {
        console.log(errors);
          Object.keys(errors).forEach(key => {
            const value = errors[key];
            ErrorToast(value)
          });
        },
      });
  };


  const handleImageChange = (event) => {
    const file = event.target.files[0];
    setImage(file);
  };
return (
<>
    <MasterLayout>
        <section className='section main-section'>
            <div className="card-content">
                <form   onSubmit={submit} encType='multipart/form-data' >
                    <div className="field">
                        <label className="label">Add Product</label>
                        <div className="field-body">
                            <div className="field">
                                <div className="control icons-left">
                                    <input className="input" type="text" onChange={(e)=> setName(e.target.value)} placeholder="Product title" />
                                </div>
                            </div>
                            <div className="field">
                                <div className="control icons-left">
                                    <input className="input" type="number"  onChange={(e)=>setPrice(e.target.value)} placeholder="Price" />
                                </div>
                            </div>
                            <div className="field">
                                <div className="control icons-left">
                                    <input className="input" type="number" onChange={(e)=> setQty(e.target.value)} placeholder="Quntity" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <div className="field">
                        <label className="label">Description</label>
                        <div className="control">
                            <textarea className="textarea" onChange={(e)=> setDescription(e.target.value)} placeholder="Explain how we can help you" />
                        </div>
                    </div>
                    <div className="field">
                        <label className="label">Status</label>
                        <div className="control">
                            <div className="block select">
                                <select onChange={(e)=> setStatus(e.target.value)} >
                                    <option selected disabled> Choose status--</option>
                                    <option value="1" >Active</option>
                                    <option value="0" >InActive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div className="field">
                        <label className="label">Status</label>
                        <div className="control">
                            <input type="file" name='image' onChange={handleImageChange} />
                        </div>
                    </div>
                    <hr />
                    <div className="field grouped">
                      <div className="control">
                        <button type="submit" className="button green">
                          Submit
                        </button>
                      </div>
                      <div className="control">
                        <button type="reset" className="button red">
                          Reset
                        </button>
                      </div>
                    </div>
                </form>
            </div>
        </section>
      </MasterLayout>
    </>
  )
}
