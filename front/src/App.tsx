import React from 'react';
import './App.css';
import Navigation from './components/Navigation'
import ModelosView from './views/ModelosView';

function App() {
  return (
    <div className="App mt-3">
      <Navigation />
      <ModelosView />
    </div>
  );
}

export default App;
