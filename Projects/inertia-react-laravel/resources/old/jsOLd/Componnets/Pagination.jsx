import { Link } from '@inertiajs/inertia-react';
import React, { useState } from 'react';

export default function Pagination({ page, total, handlePageChange }) {
    const [currentPage, setCurrentPage] = useState(page);
    // const [totalPages, setTotalPages] = useState(total / 5);
    const totalPages = Array.from({ length: Math.ceil(total / 5) }, (_, i) => i + 1);
    return (
        <div>
            <div className="btn-group">
                {totalPages.map((_, i) => (
                    <Link href={"/products?page="+(i+1)} class={page === i + 1 ?  'btn btn-active' : 'btn'}  >{i + 1}</Link>
                ))} 
            </div>
        </div>
    );
}