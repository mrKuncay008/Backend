import { useState } from "react";
import $ from "jquery";
import './index.css'
import Table from 'react-bootstrap/Table';
import 'bootstrap/dist/css/bootstrap.min.css';

function App() {
  const [name, setName] = useState("");
  const [result, setResult] = useState([]);

  const handleChange = (e) => {
      setName(e.target.value);
  };

  const handleSubmit = (e) => {
      e.preventDefault();
      const form = $(e.target);
      $.ajax({
          type: "POST",
          url: form.attr("action"),
          data: form.serialize(),
          success(data) {
            alert("Data Success Input !")
              setResult([...result, data]);
          },
          error(data) {
            alert("Gagal !! SIlakan Coba Lagi")
          },
      });
  };

  const handleKeyDown = (e) => {
    if (e.key === "Enter") {
      handleSubmit(e);
    }
  }

  return (
    <div className="App">
        <form 
          action="http://localhost:8000/cobareact/server.php"
          method="post"
          onSubmit={(event) => handleSubmit(event)}
        >
      <label htmlFor="name">Name: </label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    value={name}
                    onChange={(event) =>
                        handleChange(event)
                    }
                />
                <br />
              <button type="submit">Submit</button>
            </form>
            <ul>
              {result.map((result, index) => (
                <li key={index}>{result}</li>
              ))}
            </ul>

      <Table striped bordered hover variant="dark">
      <thead>
        <tr>
          <th>#</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Username</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <td>3</td>
          <td colSpan={2}>Larry the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </Table>
    </div>
    
  );
}

export default App;
