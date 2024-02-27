import React, { useState } from 'react';

const Exo2 = () => {
  const [count, setCount] = useState(0);

  const increment = () => {
    setCount(count + 1);
  };

  return (
    <div>
      <h2>Compteur</h2>
      <button onClick={increment}>Compteur: {count}</button>
    </div>
  );
};

export default Exo2;