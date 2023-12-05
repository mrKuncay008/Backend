import React, { useState, useEffect } from "react";
import 'bootstrap/dist/css/bootstrap.min.css';
import Table from 'react-bootstrap/Table';
import axios from "axios";

const Tabel = () => {
  const [data, setData] = useState([]);

  useEffect(() => {
    const fetchData = async () => {
      try {
        // Lakukan permintaan ke server PHP
        const response = await axios.post('http://localhost/cobareact/coba.php');

        // Setel data yang diterima ke dalam state
        setData(response.data);
      } catch (error) {
        console.error("Error Mengammbil data:", error);
      }
    };

    fetchData();
  }, []);

  return (
    <div>
      <h1>Table Data</h1>
      <Table striped bordered hover variant="dark">
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
        <tr>
          <td>1</td>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td>Male</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
          <td>Male</td>
        </tr>
        <tr>
          <td>3</td>
          <td>Kuncay</td>
          <td>Thornton</td>
          <td>@fat</td>
          <td>Famele</td>
        </tr>
      </tbody>
    </Table>
    </div>
  );
};

export default Tabel;
