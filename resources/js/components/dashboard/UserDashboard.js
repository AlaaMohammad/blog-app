import React, {Component} from 'react';
import {logout} from "../../utils/authentication";

class UserDashboard extends Component{
    constructor(props) {
        super(props);
    }

    render() {
        return(
            <div>
                <h1>This is user dashboard</h1>
            </div>
        );
    }
}

export default UserDashboard;
