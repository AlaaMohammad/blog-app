import React, {Component} from 'react';
import {BrowserRouter, Route, Switch} from "react-router-dom";
import "bootstrap/dist/css/bootstrap.min.css";
import api from '../services/api';
import ListBlogs from "./blog/ListBlogs";
import ViewBlog from "./blog/ViewBlog";



class App extends Component {
    constructor() {
        super();
        this.state = {
            loggedInStatus: "NOT_LOGGED_IN",
            blogs: {},
        };

       // this.handleLogin = this.handleLogin.bind(this);
        //this.handleLogout = this.handleLogout.bind(this);
    }

    /*checkLoginStatus() {
        this.setState({
            loggedInStatus: "NOT_LOGGED_IN",
            user: {},
            access_token: ''
        });
        api
            .post("/api/logged-in", {
                    headers: {
                        'Authorization': 'Bearer ' +sessionStorage.getItem('access_token')
                    }
                }
            )
            .then(response => {
                if (
                    response.data.logged_in &&
                    this.state.loggedInStatus === "NOT_LOGGED_IN"
                ) {
                    this.setState({
                        loggedInStatus: "LOGGED_IN",
                        user: response.data.user,
                        access_token: 'Bearer ' + response.data.access_token
                    });


                } else if (
                    !response.data.logged_in &
                    (this.state.loggedInStatus === "LOGGED_IN")
                ) {
                    this.setState({
                        loggedInStatus: "NOT_LOGGED_IN",
                        user: {}
                    });
                }
            })
            .catch(error => {
                console.log("check login error", error);
            });

    }

    componentDidMount() {
     //   this.checkLoginStatus();

    }

    handleLogout() {
        this.setState({
            loggedInStatus: "NOT_LOGGED_IN",
            user: {}
        });
    }

    handleLogin(data) {
        this.setState({
            loggedInStatus: "LOGGED_IN",
            user: data.user,
            access_token: data.access_token
        });
    }*/

    render() {
        return (
            <div className="app">
                <ViewBlog/>
{/*
                <Switch>
                    <Route
                        exact
                        path={"/"}
                        render={props => (
                            <Home
                                {...props}
                                handleLogin={this.handleLogin}
                                handleLogout={this.handleLogout}
                                loggedInStatus={this.state.loggedInStatus}
                            />
                        )}
                    />
                    <Route
                        exact
                        path={"/dashboard"}
                        render={props => (
                            <Dashboard
                                {...props}
                                loggedInStatus={this.state.loggedInStatus}
                            />
                        )}
                    />
                    <Route
                        exact
                        path={"/summary"}
                        render={props => (
                            <Summary
                                {...props}
                                loggedInStatus={this.state.loggedInStatus}
                            />
                        )}
                    />
                    <Route
                        exact
                        path={"/create-transaction"}
                        render={props => (
                            <CreateTransaction
                                {...props}
                                loggedInStatus={this.state.loggedInStatus}
                            />
                        )}
                    />
                    <Route
                        exact
                        path={"/create-category"}
                        render={props => (
                            <CreateCategory
                                {...props}
                                loggedInStatus={this.state.loggedInStatus}
                            />
                        )}
                    />
                </Switch>
*/}
            </div>
        );
    }
}

export default App;

