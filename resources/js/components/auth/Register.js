import React, {Component} from 'react';
import api from "../../services/api";

class Register extends Component {
    constructor(props) {
        super(props);
        this.state = {
            name: '',
            email: '',
            password: '',
            password_confirmation: '',
        }
        this.onChange = this.onChange.bind(this);
        this.handleRegister= this.handleRegister.bind(this);
    }

    onChange(e) {
        this.setState({
            [e.target.name]: e.target.value
        })
    }

    handleRegister(e){
        const {name,email, password,password_confirmation} = this.state;
        api.post('api/register', {
            name,
            email,
            password,
            password_confirmation
        })
            .then(response=> {
                if (response.data.status === "created") {
                    this.props.handleSuccessfulAuth(response.data);
                    sessionStorage.setItem('access_token', response.data.access_token);
                }
            })
            .catch(error=> {
                console.log("registration error", error);
            });
        e.preventDefault();
    }
    render() {
        return (
            <div>
                <form onSubmit={this.handleRegister}>
                    <div className="form-group row">
                        <label htmlFor="name" className="col-md-4 col-form-label text-md-right">
                            Name
                        </label>
                        <div className="col-md-6">
                            <input id="name" type="text" className="form-control" name="name" required
                                   autoComplete="name" autoFocus onChange={this.onChange } />
                        </div>
                    </div>
                    <div className="form-group row">
                        <label htmlFor="email" className="col-md-4 col-form-label text-md-right">E Mail</label>

                        <div className="col-md-6">
                            <input id="email" type="email" className="form-control"
                                   name="email"  required autoComplete="email" onChange={this.onChange } />
                        </div>
                    </div>

                    <div className="form-group row">
                        <label htmlFor="password" className="col-md-4 col-form-label text-md-right">Password</label>

                        <div className="col-md-6">
                            <input id="password" type="password"
                                   className="form-control" name="password"
                                   required autoComplete="new-password" onChange={this.onChange } />
                        </div>
                    </div>
                    <div className="form-group row">
                        <label htmlFor="password-confirm" className="col-md-4 col-form-label text-md-right">Confirm
                            Password</label>

                        <div className="col-md-6">
                            <input id="password-confirm" type="password" className="form-control"
                                   name="password_confirmation" required autoComplete="new-password" onChange={this.onChange } />
                        </div>
                    </div>
                    <div className="form-group row mb-0">
                        <div className="col-md-6 offset-md-4">
                            <button type="submit" className="btn btn-primary">
                                Register
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        );
    }
}

export default Register;
