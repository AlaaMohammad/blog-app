import React , {Component} from 'react';
import api from "../../services/api";

class CreateTransaction extends Component{
    handleSubmit (e) {

        const { content} = e.target

        const data = {
            content: content.value,
        }

        const storyId = 1;
        api.post('/append-story-content/'+storyId, data)
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
                        <h1>Append Content</h1>
                        <div className="form-group row">
                            <label htmlFor="category" className="col-md-4 col-form-label text-md-right">Category</label>
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
