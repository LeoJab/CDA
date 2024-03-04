import { Link, Route, Routes } from "react-router-dom";
import Categories from './Categories';
import Produits from './Produits';

function App() {
  return (

  <div>
      <nav>
        <Link to="/Categories">Categories</Link>

      </nav>
    <hr />
    <Routes>
      <Route path="Categories" element={<Categories />} />

    </Routes>
  </div>
  );
}

export default App;