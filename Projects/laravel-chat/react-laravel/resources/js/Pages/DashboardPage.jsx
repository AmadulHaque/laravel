import React,{Suspense,lazy} from 'react';
import LazyLoader from "../Layout/LazyLoader";
import MasterLayout from "../Layout/MainLayout";
const  Dashboard = lazy(()=>import('../Components/Dashboard/Dashboard'));

const DashboardPage = () => {
    return (
        <div>
            <MasterLayout>
                <Suspense fallback={<LazyLoader/>}>
                    <Dashboard/>
                </Suspense>
            </MasterLayout>
        </div>
    );
};

export default DashboardPage;