import React, {Component} from "react";
import axios from "axios";

class ViewBlog extends Component {
    constructor(props) {
        super(props)
        this.state = {
            blog :{},
            stories: []
        }
    }

    componentDidMount() {
        const blogId = 1;
        axios.get('/api/view-blog-content/'+blogId).then(response => {
            this.setState({
                stories: response.data.stories
            })
        });

    }

    render() {
        const {stories} = this.state;
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
                        {stories.map((story) => (
                            <tbody>
                            <tr>
                                <td> {story.title}</td>
                                <td> {story.content}</td>
                            </tr>
                            </tbody>
                        ))}
                    </table>
                </div>
            </div>
        );
    }
}

export default ViewBlog;

