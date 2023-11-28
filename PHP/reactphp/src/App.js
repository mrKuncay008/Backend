import { useState } from "react";
import $ from "jquery";

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
      });
  };

  const handleKeyDown = (e) => {
    if (e.key == "Enter") {
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
    </div>
  );
}

export default App;
