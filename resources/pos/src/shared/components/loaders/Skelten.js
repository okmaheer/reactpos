import React from "react";

const Skelten = () => {
    const numberOfRows = 6;
    const totalCol = 4

    const renderedRows = [...Array(numberOfRows)].map((e, i) => (
           <div className="skeleton" key={i}></div>
      ));

    return <>
        { [...Array(totalCol)].map((e, i) => (
            <div className="rowdata" key={i}>{renderedRows}</div>
      ))}
    </>;
}

export default Skelten;
