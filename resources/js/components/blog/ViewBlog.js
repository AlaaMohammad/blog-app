import React, {Component} from "react";
import axios from "axios";
import {Link} from "react-router-dom";

class ViewBlog extends Component {
    constructor(props) {
        super(props)
        this.state = {
            blog :{},
            stories: []
        }
    }

    componentDidMount() {
        const blogId =this.props.match.params.id;
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
                        {stories.map((story) => (
                            <article
                                className="item is-even is-image post tag-creative tag-product tag-hash-post-card-amber featured">
                                <div className="item-container">
                                    <div className="item-content">
                                        <h2 className="item-title">
                                             <Link className="global-underline" to={`/story/${story.id}`}>{story.title}</Link>
                                        </h2>
                                        <div className="post-content">
                                        <p className="item-excerpt">
                                            {story.content}
                                        </p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        ))}
                </div>
            </div>
        );
    }
}

export default ViewBlog;

