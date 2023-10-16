import './App.css';
//import 'bootstrap/dist/css/bootstrap.min.css'
import { BrowserRouter, Routes, Route} from 'react-router-dom'
import cafestaff from './cafestaff';


function App() {
  return (
    <div className="App">
        <BrowserRouter>
          <Routes>
            <Route path='/' element={<cafestaff />}/>
          </Routes>
        </BrowserRouter>
    </div>
  );
}

export default App;
