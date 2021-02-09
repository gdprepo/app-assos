import { Link } from "react-router-dom";

const AssoList = ({ associations }) => {
    return (
        <div className="container mt-5">
                <h2>Liste des Associations</h2>

            {associations.map((association) => (
                <div
                    key={association.id}
                    className="card"
                    style={{ width: "100%", marginTop: "30px" }}
                >
                    
                    <div class="row no-gutters">
                        <div class="col-auto">
                            <img
                                style={{ width: "200px" }}
                                src={association.logo}
                                className="card-img-top"
                                alt="Logo"
                            />
                        </div>
                        <div class="col">
                            <div style={{ marginTop: "20px" }} class="card-block px-2">
                                <h4 class="card-title">{association.title}</h4>
                                <p class="card-text">
                                    {association.description}
                                </p>
                                <Link
                                    to={"/" + association.id}
                                    className="btn btn-primary"
                                >
                                    See More
                                </Link>
                            </div>
                        </div>
                    </div>

                </div>
            ))}
        </div>
    );
};

export default AssoList;
