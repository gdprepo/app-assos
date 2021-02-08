import React, { createContext } from "react";

const initialState = {
    associations: [
        {
            id: 1,
            name: "Coucou",
            description: "Test",
        },
    ],
};

const wikAssoContext = createContext(initialState);

const wikAssoState = () => {
    
    return <div></div>;
};

export default wikAssoContext;
