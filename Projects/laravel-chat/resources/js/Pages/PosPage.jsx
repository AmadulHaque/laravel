import React,{Suspense,lazy} from 'react';
import LazyLoader from "../Layout/LazyLoader";
import MasterLayout from "../Layout/MainLayout";
const  Pos = lazy(()=>import('../Components/Pos/Pos'));

const PosPage = () => {
    return (
      <div>
          <MasterLayout>
            <Suspense fallback={<LazyLoader/>}>
              <Pos/>
            </Suspense>
          </MasterLayout>
      </div>
    );
};

export default PosPage;