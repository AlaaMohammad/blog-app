import React, {Component} from "react";
import axios from "axios";
import {Link} from "react-router-dom";

class ListBlogs extends Component {
    constructor(props) {
        super(props)
        this.state = {
            blogs: []
        }
    }

    componentDidMount() {
        axios.get('/api/view-blogs').then(response => {
            console.log(response.data.blogs)
            this.setState({
                blogs: response.data.blogs
            })
        });

    }

    render() {
        const {blogs} = this.state;
        return (
            <div className="container">
                <div className="row custom-elements-wrap">
                        {blogs.map((blog,index) => (
                            index <= 2 ?
                            <div className="custom-element">
                            <Link to={`/blog/${blog.id}`}>
                            <img src={`/img/${blog.img_src}`} alt="story"/>
                            </Link>
                            <h2 className="global-underline">{blog.title}</h2>
                            <span>11 posts</span>
                            </div>:
                                <div className="custom-element bottom">
                                    <Link to={`/blog/${blog.id}`}>
                                        <img src={`/img/${blog.img_src}`} alt="story"/>
                                    </Link>
                                    <h2 className="global-underline">{blog.title}</h2>
                                </div>
                        ))}
                </div>
            </div>
        );
    }
}

export default ListBlogs;

