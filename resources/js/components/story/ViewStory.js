import React, {Component} from "react";
import axios from "axios";
import {Link} from "react-router-dom";

class ViewBlog extends Component {
    constructor(props) {
        super(props)
        this.state = {
            title: '',
            content: '',
            img_src: ''
        }
    }

    componentDidMount() {
        const storyId = this.props.match.params.id;
        axios.get('/api/view-story/' + storyId).then(response => {
            this.setState({
                title: response.data.story.title,
                content: response.data.story.content,
                img_src: response.data.story.img_src
            })
        });

    }

    render() {
        const {title,content,img_src} = this.state;
        return (
            <div className="container">
                <div className="row">
                    <div className="story-item-container global-color">
                        <div className="item-image global-image global-color">
                            <img src={`/img/story/${img_src}`} alt="story"/>
                        </div>
                        <div className="">
                            <h1 className="is-hero">{title}</h1>
                        </div>
                    </div>
                    <div className="post-content">
                        <p>{content}</p>
                    </div>
                </div>
            </div>
        );
    }
}

export default ViewBlog;

