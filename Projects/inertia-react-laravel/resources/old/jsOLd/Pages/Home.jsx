import React,{Fragment,useState,useEffect } from 'react'
import { Link } from '@inertiajs/inertia-react'
import MasterLayout from '../Componnets/MasterLayout/MasterLayout.jsx'
import PageLoader from '../Componnets/MasterLayout/PageLoader.jsx'

export default function Home({product,inactive,active}) {
    const [loading, setLoading] = useState(true);

    useEffect(() => {
        setLoading(false);
    },[]);

  return (
    <Fragment>
      <MasterLayout>
      {loading==true ? (
        <PageLoader />
      ) : (
            <section className='section main-section'>
                <div class="grid gap-6 grid-cols-1 md:grid-cols-3 mb-6">
                    <div class="card">
                        <div class="card-content">
                            <div class="flex items-center justify-between">
                                <div class="widget-label">
                                    <h3>
                                        Total Prodact
                                    </h3>
                                    <h1>
                                        {product}
                                    </h1>
                                </div>
                                <span class="icon widget-icon text-green-500"><i
                                        class="mdi mdi-account-multiple mdi-48px"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="flex items-center justify-between">
                                <div class="widget-label">
                                    <h3>
                                        Active Product
                                    </h3>
                                    <h1>
                                        {active}
                                    </h1>
                                </div>
                                <span class="icon widget-icon text-blue-500"><i
                                        class="mdi mdi-cart-outline mdi-48px"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-content">
                            <div class="flex items-center justify-between">
                                <div class="widget-label">
                                    <h3>
                                        InActive Product
                                    </h3>
                                    <h1>
                                        {inactive}
                                    </h1>
                                </div>
                                <span class="icon widget-icon text-red-500"><i class="mdi mdi-finance mdi-48px"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
      )}

      </MasterLayout>
    </Fragment>
  )
}
