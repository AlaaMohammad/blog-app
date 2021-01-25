import React, {Component} from 'react';
import api from "../../services/api";

class Login extends Component {
    constructor(props) {
        super(props);
        this.state = {
            email: '',
            password: '',
        };
        this.onChange = this.onChange.bind(this);
        this.handleLogin = this.handleLogin.bind(this);
    }

    onChange(e) {
        this.setState({
            [e.target.name]: e.target.value
        })
    }

    handleLogin(e) {
        e.preventDefault();
        const {email, password} = this.state;
            api.post('/api/login', {
                email: email,
                password: password
            }).then(response => {
                console.log(response.data);
                if (response.data.logged_in) {
                    this.props.handleSuccessfulAuth(response.data);
                }
            })
                .catch(error => {
                    console.log("login error", error);
                });
            e.preventDefault();
    }

    render() {
        return (
            <div>
                <form onSubmit={this.handleLogin}>
                    <div className="form-group row">
                        <label htmlFor="email" className="col-md-4 col-form-label text-md-right">E Mail</label>
                        <div className="col-md-6">
                            <input id="email" type="email" className="form-control"
                                   name="email" required autoComplete="email" onChange={this.onChange }/>
                        </div>
                    </div>
                    <div className="form-group row">
                        <label htmlFor="password" className="col-md-4 col-form-label text-md-right">Password</label>
                        <div className="col-md-6">
                            <input id="password" type="password"
                                   className="form-control" name="password"
                                   required autoComplete="password" onChange={this.onChange }/>
                        </div>
                    </div>
                    <div className="form-group row mb-0">
                        <div className="col-md-6 offset-md-4">
                            <button type="submit" className="btn btn-primary">
                                Login
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        );
    }
}

export default Login;
