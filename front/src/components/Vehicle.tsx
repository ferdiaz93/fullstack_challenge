import React, { useState, Fragment } from 'react'

function Vehicle(props:any) {
  return (
    <>
      <div>
        <h4>{props.vehicle.brandName}</h4>
        <p>{props.vehicle.year} | {props.vehicle.price}</p>
      </div>
    </>
  )
}

export default Vehicle;