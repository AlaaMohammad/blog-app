import React, {Component} from 'react';
import { Route, Switch, withRouter } from 'react-router-dom';
import "bootstrap/dist/css/bootstrap.min.css";
import UserDashboard from './dashboard/UserDashboard'
import ListBlogs from "./blog/ListBlogs";
import ViewBlog from "./blog/ViewBlog";
import ViewStory from "./story/ViewStory";
import PrivateRoute from "./route/PrivateRoute";
import Login from "./auth/Login";
import Register from "./auth/Register";
import Header from "./layout/Header";
import CreateStory from "./story/CreateStory";


class App extends Component {
    constructor() {
        super();
        this.state = {
            loggedInStatus: "NOT_LOGGED_IN",
            blogs: {},
        };

        /* this.handleLogin = this.handleLogin.bind(this);
         this.handleLogout = this.handleLogout.bind(this);*/
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
/*
        const { location: { pathname } } = this.props;
*/

        return (
            <div className="app">
                <Header

                />
                <Switch>
                    <Route
                        exact
                        path={"/login"}
                        render={props => (
                            <Login
                                {...props}
                            />
                        )}
                    />
                                <Route
                        exact
                        path={"/register"}
                        render={props => (
                            <Register
                                {...props}
                            />
                        )}
                    />
                    <Route
                        exact
                        path={"/"}
                        render={props => (
                            <ListBlogs
                                {...props}
                            />
                        )}
                    />

                    <Route
                        exact
                        path={"/blog/:id"}
                        render={props => (
                            <ViewBlog
                                {...props}
                            />
                        )}
                    />
                    <Route
                        exact
                        path="/story/:id"
                        component={ViewStory}
                    />
                    <Route
                        exact
                        path={"/create-story"}
                        render={props => (
                            <CreateStory
                                {...props}
                                loggedInStatus={this.state.loggedInStatus}
                            />
                        )}
                    />
                    <PrivateRoute exact path="/dashboard" component={UserDashboard}/>

                    <Route path="*" component={() => "404 Not Found "}/>
                    }
                    {/* <Route
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
                        path={"/create-category"}
                        render={props => (
                            <CreateStory
                                {...props}
                                loggedInStatus={this.state.loggedInStatus}
                            />
                        )}
                    />
                   */}
                </Switch>
            </div>
        );
    }
}

export default App;

