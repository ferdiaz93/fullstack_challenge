import React from 'react'
import Nav from 'react-bootstrap/Nav'
import '../styles/modelosView.css'

function ModelosView(){
    return (
      <main className="container mt-5 px-0">
        <h1 className="text-left">Descubri todos los modelos</h1>
        <div className="filters-container mt-5 row mx-0 align-items-center">
          <div className="mr-5 col-6 col-md-1">Filtrar por</div>
          <div className="d-none d-md-block col-md-8">
            <Nav variant="pills" defaultActiveKey="/home">
              <Nav.Item>
                <Nav.Link eventKey="home">Todos</Nav.Link>
              </Nav.Item>
              <Nav.Item>
                <Nav.Link eventKey="link-1">Autos</Nav.Link>
              </Nav.Item>
              <Nav.Item>
                <Nav.Link eventKey="link-2">Pickups y Comerciales</Nav.Link>
              </Nav.Item>
              <Nav.Item>
                <Nav.Link eventKey="link-3">SUSVS y Crossovers</Nav.Link>
              </Nav.Item>
            </Nav>
          </div>
          <div className="col-md-2">
            Ordernar por
          </div>
        </div>
      </main>
    )
}

export default ModelosView;