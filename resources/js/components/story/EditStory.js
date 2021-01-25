import React , {Component} from 'react';
import api from "../../services/api";

class CreateTransaction extends Component{
    handleSubmit (e) {

        const { content} = e.target

        const data = {
            title: title.value,
            content: content.value,
        }

        const storyId = 1;
        api.post('/edit-story-content/'+storyId, data)
            .then(response => {
                history.push('/dashboard')
            })
            .catch(error=> {
                console.log("create error", error);
            })
        e.preventDefault();

    }
    render() {
        return(
            <div>
                <form onSubmit={this.handleSubmit}>
                    <div className="container">
                        <h1>Edit Story</h1>
                        <div className="form-group row">
                            <label htmlFor="amount" className="col-md-4 col-form-label text-md-right">Title</label>
                            <div className="col-md-6">
                                <input id="title" type="text" className="form-control"
                                       name="title" required   onChange={this.onChange }/>
                            </div>
                        </div>
                        <div className="form-group row">
                            <label htmlFor="category" className="col-md-4 col-form-label text-md-right">Content</label>
                            <div className="col-md-6">
                                <teaxtarea id="category" type="text" className="form-control"
                                           name="content" required   onChange={this.onChange }/>
                            </div>
                        </div>
                        <div className="form-group row mb-0">
                            <div className="col-md-6 offset-md-4">
                                <button type="submit" className="btn btn-primary">
                                    Create
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        );
    }
}

export default CreateTransaction;
