import React ,{useState ,useEffect }from 'react'
import { FaEdit,FaTrashAlt } from "react-icons/fa";
import { DeleteAlert } from '../../Helper/DeleteAlert';

import { SuccessToast } from '../../Helper/FormHelper';
import { Inertia } from '@inertiajs/inertia';
import { InertiaLink, Link } from '@inertiajs/inertia-react';
import Pagination from '../../Componnets/Pagination';
import MasterLayout from '../../Componnets/MasterLayout/MasterLayout';
import { usePage } from '@inertiajs/inertia-react';
import PageLoader from '../../Componnets/MasterLayout/PageLoader'


const ProductPage = () => {
    const [loading, setLoading] = useState(true);
    const { products ,total} = usePage().props;
    const DeleteItem = async (id) => {
        let Result = await DeleteAlert();
        if(Result.isConfirmed){
            Inertia.delete('/product/delete/'+id);
            SuccessToast("Product Remove Success!")
        }
    }
    const [page, setPage] = useState(1);
    const [productlist, setProducts] = useState([]);

    const query = window.location.search;
    const params = query.split('?').map((param) => {
    const [key, value] = param.split('=');
        return {
        key: key,
        value: value,
        };
    });
   


    useEffect(()=>{
        if (params.length==1) {
            let dd = parseInt(1);
            setPage(dd);
        }else{
            let valcheck = params[1]['value'] ? params[1]['value'] : 1;
            let dd = parseInt(valcheck);
            setPage(dd);
        }
        setProducts(products.data)
        setLoading(false)
    },[])


    
    const fetchProducts = () => {
        Inertia.get('/products', {
          onSuccess: (data) => {
            console.log(data);
          },
        });
      };

return (
<>
    <MasterLayout>
    {loading==true ? (
        <PageLoader /> 
      ) : (
        <section className='section main-section'>
            <div className="card has-table">
                <header className="card-header">
                    <p className="card-header-title">
                        <span className="icon">
                            <i className="mdi mdi-account-multiple" />
                        </span>
                        Products
                    </p>
                    <button onClick={()=>fetchProducts()} className="card-header-icon">
                        <span className="icon">
                            <i className="mdi mdi-reload" />
                        </span>
                    </button>
                </header>
                <div className="card-content">
                    <table>
                        <thead>
                            <tr>
                                <th className="checkbox-cell">
                                    <label className="checkbox">
                                        <input type="checkbox" />
                                        <span className="check" />
                                    </label>
                                </th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Qty</th>
                                <th>status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        {productlist.map((product)=>(
                            <tr>
                                <td className="checkbox-cell">
                                    <label className="checkbox">
                                        <input type="checkbox" />
                                        <span className="check" />
                                    </label>
                                </td>
                                <td>{product.name}</td>
                                <td>
                                    <div className="flex items-center space-x-3">
                                        <div className="avatar">
                                            <div className="mask mask-squircle w-12 h-12">
                                                <img src={product.image} alt="Product Image" />
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>{product.description}</td>
                                <td>{product.price}</td>
                                <td>{product.qty}</td>
                                <td>
                                    {product.status ===1 ? (
                                        <h1>Active</h1>
                                        ) : (
                                        <h1>InActive</h1>
                                    )}
                                </td>
                                <td className="actions-cell">
                                    <div className="buttons right nowrap">
                                        <Link   href={"/product/"+product.id+"/edit"} className="button small green --jb-modal" data-target="sample-modal-2">
                                            <span className="icon">
                                                <i className="mdi mdi-eye" />
                                            </span>
                                        </Link>
                                        <button onClick={DeleteItem.bind(this,product.id)} className="button small red --jb-modal" data-target="sample-modal">
                                            <span className="icon">
                                                <i className="mdi mdi-trash-can" />
                                            </span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        ))}
                        </tbody>
                    </table>
                    <div className="table-pagination">
                        <div className="flex items-center justify-between">
                            <Pagination page={page} total={total} />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        )}
    </MasterLayout>
</>
)
}
export default ProductPage;
