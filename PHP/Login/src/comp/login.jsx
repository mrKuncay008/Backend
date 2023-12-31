import { useState, useEffect } from 'react';
import './style.css';

const Log = () => {

    const [User , setUser] = useState("");
    const [Pass , setPass] = useState("");
    const [Error , setError] = useState("");
    const [Msg , setMsg] = useState("");

    useEffect (() => {
        setTimeout(function () {
            setMsg("")
        }, 5000)
    }, [Msg]);

    const handleInputChange = (e, type) => {
        switch (type) {
            case "User":
                setError("");
                setUser(e.target.value);
                if (e.target.value === "") {
                    setError("Username Tidak Boleh Kosong");
                }
                break;

                case "Pass":
                    setError("");
                    setPass(e.target.value);
                    if (e.target.value === "") {
                        setError("Password Tidak Boleh Kosong");
                    }
                break;
                default:
        }
    }
    const logSub = () => {
        if (User !== "" && Pass !== "") {
            var url = "http://localhost/Login/server.php";
            var headers = {
                "Accept" : "application/json",
                "Content-type" : "application/json"
            };
            var Data = {
                User: User,
                Pass: Pass
            };
            fetch(url, {
                method: "POST",
                headers: headers,
                body: JSON.stringify(Data)
            }).then((response) => response.json())
            .then((response) => {
                if (response[0] && response[0].result) {
                    if (response[0].result === 'Username atau Password Salah!!') {
                        setError(response[0].result);
                    } else {
                        setMsg(response[0].result);
                    }
                } else {
                    setError('Format respons tidak sesuai yang diharapkan.');
                }
            })
            .catch((err) => {
                setError('Warning: '+ err.message);

            });
        }
        else {
            setError("Silakan Di Isi Dahulu !")
        }
    }

    return (
        <div>
            <p>
                {
                    Error !== "" ?
                    <span className='eror'>{Error}</span>:
                    <span className='success'>{Msg}</span>
                }
            </p>
        <div className='form'>
            <label>Username</label>
            <input
            type="text"
            value={User}
            onChange={(e) => handleInputChange(e, "User")}
            placeholder='Masukan Username'
            />

            <label>Password</label>
            <input
            type="password"
            value={Pass}
            onChange={(e) => handleInputChange(e, "Pass")}
            placeholder='Masukan Password'
            />
            <button
            type='submit'
            className="button"
            defaultValue="login"
            onClick={logSub}>
                Submit
            </button>
        </div>
        </div>
    );
}
export default Log;
