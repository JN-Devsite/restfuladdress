import React, { Component } from 'react';
 

const Address = ({address}) => {
	
    
  const divStyle = {
      /*code omitted for brevity */
  }
 
  //if the props product is null, return Product doesn't exist
  if(!address) {
    return(<div style={divStyle}>  Address Doesnt exist </div>);
  }
     
  //Else, display the product data
  return(  
    <div style={divStyle}> 
      <h2> {address.address} </h2>
		<h3> {address.city}, {address.country}, {address.code}</h3>
		<p><strong>Lat: </strong><label id="lat">{address.lat}</label> - <strong>Long: </strong><label id="long">{address.long}</label></p>
      
    </div>
  )
}
 
export default Address ;