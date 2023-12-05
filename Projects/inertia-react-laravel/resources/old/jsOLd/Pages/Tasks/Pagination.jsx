import React from 'react';

const Pagination = ({ currentPage, totalPages, onPageChange }) => {
  const handlePageChange = page => {
    onPageChange(page);
  };

  const renderPaginationItems = () => {
    const items = [];

    for (let page = 1; page <= totalPages; page++) {
      items.push(
        <>
          <button key={page} type="button" className={`pagination-item ${currentPage === page ? 'button active' : 'button'}`} onClick={() => handlePageChange(page)}>
          {page}
          </button>
        </>
      );
    }

    return items;
  };

  return (
    <ul className="pagination">
     
      <div className="flex items-center justify-between">
          <div className="buttons">
          {renderPaginationItems()}
          </div>
          <small>Page 1 of 3</small>
        </div>
    </ul>
  );
};

export default Pagination;
