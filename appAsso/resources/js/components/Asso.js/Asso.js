import React, { useState } from "react";
import { Link, useParams } from "react-router-dom";

const Asso = ({ posts }) => {
    let { id } = useParams();
    return (
        <div className="container asso-posts">
            <div className="list-group">
                {posts.map((post) => {
                    if (id == post.assos_id) {
                        return (
                            <Link
                                key={post.id}
                                className="list-group-item list-group-item-action active mb-3"
                                aria-current="true"
                            >
                                <div class="row no-gutters">
                                    <div class="col-auto">
                                        <img
                                            src={post.image}
                                            className="rounded float-start"
                                            alt="..."
                                        ></img>
                                    </div>
                                    <div class="col">
                                        <div class="card-block px-2">
                                            <h4 class="card-title">
                                                {post.title}
                                            </h4>
                                            <small>{post.type}</small>
                                            <small>{post.created_at}</small>
                                            <p class="card-text">
                                                {post.description}
                                            </p>
       
                                        </div>
                                    </div>
                                </div>
                            </Link>
                        );
                    }
                })}
            </div>
        </div>
    );
};

export default Asso;
