import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Address from './Address';

/* An example React component */
class Main extends Component {
	
	constructor() {
		super();
		
		this.state = {
		addresses: [],
		currentAddress: null
		}
	}
	
	componentDidMount() {
		fetch('/addresses')
			.then(response => {
				return response.json();
			})
			.then(addresses => {
				this.setState({ addresses });
			});
	}
	
	
	
	renderAddresses() {
		return this.state.addresses.map(address => {
			return (
				<li onClick={() =>this.handleClick( address )} key={ address.id } >
					{ address.address }
				</li>
			);
		})
	}
	
	handleClick( address ) {
		this.setState( { currentAddress:address });
	}
	
	
	render() {
		return (
			
			
			<div>
				<div className="leftDiv">
					<h3> All Addresses </h3>
					<ul>
						{ this.renderAddresses() }
					</ul>
				</div>
				
				<Address address={this.state.currentAddress} />
			</div>
			
		);
	}
}
 
export default Main;
 
/* The if statement is required so as to Render the component on pages that have a div with an ID of "root";  
*/
 
if (document.getElementById('root')) {
    ReactDOM.render(<Main />, document.getElementById('root'));
}