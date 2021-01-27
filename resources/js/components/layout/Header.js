import React, {Component} from 'react';
import {Link} from "react-router-dom";
import {isLogin} from "../../utils/authentication";

class Header extends Component {
    constructor(props) {
        super(props);
    }

    render() {
        return (
            <div className="container">
                <nav id="navbar" className="navbar navbar-expand-lg navbar-light ">
                    <div className="navbar-brand navbar-brand-centered">Blogy</div>
                    <div className="collapse navbar-collapse" id="navbarText">
                        <ul className="navbar-nav mr-auto">
                            <li className="nav-item active">
                                <Link className="nav-link" to="/">Home</Link>
                            </li>
                        </ul>
                        {
                            isLogin() ?<ul className="navbar-nav navbar-right">
                                <li className="nav-item"><Link className="nav-link" to="/dashboard">Dashboard</Link></li>
                                <li className="nav-item"><Link className="nav-link" to="/create-story">Create Story</Link></li>
                            </ul>:  <ul className="navbar-nav navbar-right">
                                <li className="nav-item"><Link className="nav-link" to="/Login">Login</Link></li>
                                <li className="nav-item"><Link className="nav-link" to="/register">Register</Link></li>
                            </ul>
                    }

                    </div>
                </nav>
            </div>
        );
    }
}

export default Header;
