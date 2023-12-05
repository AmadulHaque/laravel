import {useState ,useRef, useEffect} from 'react';
import 'react-toastify/dist/ReactToastify.css';
import { Inertia } from '@inertiajs/inertia';
import {ErrorToast, IsEmpty,SuccessToast} from "../../Helper/FormHelper.js";
import MasterLayout from '../../Componnets/MasterLayout/MasterLayout.jsx';
import { Link } from '@inertiajs/inertia-react';


const EditPage = ({product}) => {

    const [id, setid] = useState(0);
    const [name, setName] = useState('');
    const [description, setDescription] = useState('');
    const [price, setPrice] = useState('');
    const [qty, setQty] = useState('');
    const [status, setStatus] = useState();
    const [image, setImage] = useState();


    useEffect(()=>{
        setName(product.name);
        setDescription(product.description);
        setPrice(product.price);
        setQty(product.qty);
        setid(product.id);
        setImage(product.image);
        setStatus(product.status);
    },[])

    const formData = new FormData();
    formData.append('id', id);
    formData.append('name', name);
    formData.append('description', description);
    formData.append('price', price);
    formData.append('qty', qty);
    formData.append('image', image);
    formData.append('status', status);

    const submit = (e) => {
      e.preventDefault();
        Inertia.post('/product/update', formData, {
          headers: {
            'Content-Type': 'multipart/form-data',
          },
          onError: (errors) => {
            Object.keys(errors).forEach(key => {
                const value = errors[key];
                ErrorToast(value)
            });
          },

        });
        SuccessToast('Product updated successfully');
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
                                    <input className="input" value={name} type="text" onChange={(e)=> setName(e.target.value)}  />
                                </div>
                            </div>
                            <div className="field">
                                <div className="control icons-left">
                                    <input className="input" type="number"  value={price} onChange={(e)=>setPrice(e.target.value)} />
                                </div>
                            </div>
                            <div className="field">
                                <div className="control icons-left">
                                    <input className="input" type="number" value={qty} onChange={(e)=> setQty(e.target.value)}/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <div className="field">
                        <label className="label">Description</label>
                        <div className="control">
                            <textarea className="textarea" onChange={(e)=> setDescription(e.target.value)} value={description}  />
                        </div>
                    </div>
                    <div className="field">
                        <label className="label">Status</label>
                        <div className="control">
                            <div className="block select">
                                <select  value={status} onChange={(e)=> setStatus(e.target.value)} >
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
                          <img src={'/'+product.image}  className='' alt="Preview" style={{ width: '100px' }} />
                            <input type="file" name='image' onChange={handleImageChange} />
                        </div>
                    </div>
                    <hr />
                    <div className="field grouped">
                      <div className="control">
                        <button type="submit" className="button green">Submit</button>
                      </div>
                      <div className="control">
                        <Link href="/products" className="button red">Back</Link>
                      </div>
                    </div>
                </form>
            </div>
        </section>
      </MasterLayout>

    </>
  )
}
export default EditPage;
