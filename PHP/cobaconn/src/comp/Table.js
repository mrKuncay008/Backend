import React, { useState, useEffect } from "react";
import 'bootstrap/dist/css/bootstrap.min.css';
import Table from 'react-bootstrap/Table';
import axios from "axios";

const Tabel = () => {
  const [data, setData] = useState([]);
  const [loading,setLoading] = useState(true);
  const [error,setError] = useState(null);

  useEffect(() => {
    const fetchData = async () => {
      try {
        // Lakukan permintaan ke server PHP
        const response = await axios.get('http://localhost/Table/server.php');
        // Setel data yang diterima ke dalam state
        setData(response.data);
      } catch (error) {
        setError(error);
      } finally {
        setLoading(false);
      }
    };

    fetchData();
  }, []);

  if (loading) {
    return <p>Loading...</p>;
  }
  
  if (error) {
    return <p>Error: {error.message}</p>;
  }

  return (
    <div>
      <h1>Table Data</h1>
      <Table className="table-dark">
      <thead>
        <tr>
          <th>ID</th>
          <th>Username</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Gender</th>
        </tr>
      </thead>
      <tbody className="table-light">
      {Array.isArray(data) && data.length > 0 ? (
        data.map((item) => (
        <tr key={item.id}>
          <td className="fw-bold">{item.id}</td>
          <td className="table-warning">{item.username}</td>
          <td className="">{item.first_name}</td>
          <td className="">{item.last_name}</td>
          <td className="">{item.gander}</td>
        </tr>
        ))
        ) : (
          <tr>
          <td colSpan="5">No data available</td>
        </tr>
      )}
      </tbody>
    </Table>
    </div>
  );
};

export default Tabel;
