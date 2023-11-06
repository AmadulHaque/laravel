import React,{useState } from 'react';
import { Inertia } from '@inertiajs/inertia';
import Pagination from './Pagination.jsx';
import MasterLayout from '../../Componnets/MasterLayout/MasterLayout.jsx'


const TaskList = ({ tasks }) => {

  const [currentPage, setCurrentPage] = useState(1);



  const handlePageChange = page => {
    setCurrentPage(page);
    console.log(tasks.last_page);
  };

  return (
    <div>
      <MasterLayout>
          <section className=''>

              <div className="card has-table">
                <header className="card-header">
                  <p className="card-header-title">
                    <span className="icon">
                      <i className="mdi mdi-account-multiple" />
                    </span>
                    Clients
                  </p>
                  <a href="#" className="card-header-icon">
                    <span className="icon">
                      <i className="mdi mdi-reload" />
                    </span>
                  </a>
                </header>
                <div className="card-content">
                  <table>
                    <thead>
                      <tr>

                        <th>Name</th>
                        <th>Description</th>
                        <th>Date</th>
                      </tr>
                    </thead>
                    <tbody>
                    {tasks.data.map(task => (
                      <tr>
                        <td data-label="Name">{task.title} </td>
                        <td data-label="Company">Description</td>
                        <td data-label="City">South Cory</td>
                      </tr>
                    ))}
                    </tbody>
                  </table>
                  <div className="table-pagination">
                    <Pagination
                      currentPage={currentPage}
                      totalPages={tasks.last_page}
                      onPageChange={handlePageChange}
                    />
                  </div>
                </div>
              </div>

          </section>
      </MasterLayout>
    </div>
  );
};

export default TaskList;
