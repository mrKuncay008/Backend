// import { useState } from 'react'
import { BrowserRouter, Routes, Route } from 'react-router-dom'
import './App.css'
import Log from './comp/login'
import Dasb from './comp/dasbord'

function App() {
  return (
    <>
      <BrowserRouter>
      <Routes>
        <Route path='/' element={<Log />} />
        <Route path='/dasboard' element={<Dasb />} />
      </Routes>
      </BrowserRouter>
    </>
  )
}

export default App
