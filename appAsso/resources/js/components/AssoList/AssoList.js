const AssoList = ({ associations }) => {
    return (
        <div className="container d-flex justify-content-around mt-5">
            {associations.map((association) => (
                <div
                    key={association.id}
                    className="card"
                    style={{ width: "18rem" }}
                >
                    <img
                        src={association.logo}
                        className="card-img-top"
                        alt="Logo"
                    />
                    <div className="card-body">
                        <h5 className="card-title">{association.title}</h5>
                        <p className="card-text">{association.description}</p>
                        <a href="#" className="btn btn-primary">
                            See More
                        </a>
                    </div>
                </div>
            ))}
        </div>
    );
};

export default AssoList;
