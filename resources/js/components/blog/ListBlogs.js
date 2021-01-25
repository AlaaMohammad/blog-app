import React, {Component} from "react";
import axios from "axios";

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
                <h1>list Blogs</h1>
                <div className="row">
                    <table className="table table-hovered table-striped">
                        <thead>
                        <tr>
                            <td>Blog</td>

                        </tr>
                        </thead>
                        {blogs.map((blog) => (
                            <tbody>
                            <tr>
                                <td> {blog.title}</td>
                            </tr>
                            </tbody>
                        ))}
                    </table>
                </div>
            </div>
        );
    }
}

export default ListBlogs;

