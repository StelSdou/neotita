import React, { useEffect, useState } from "react";

export default function ReactPage() {

  //const url = "http://localhost:3000/"
  const url = "https://www.impneotita.gr/"

  const [data, setData] = useState(null);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState(null);
  const [year, setYear] = useState(new Date().getFullYear());

  const prevYear = () => setYear(year - 1);
  const nextYear = () => setYear(year + 1);

  useEffect(() => {
    const fetchData = async () => {
      try {
        const response = await fetch(`${url}api/book/${year}`);
//        const response = await fetch(`${url}api/book/0`)
        if (!response.ok){
          console.log("Not response");
          throw new Error('Error on response api');
        } 
        const result = await response.json();
        setData(result);
      }catch (err){
        setError(err);
      }finally {
        setLoading(false);
      }
    };

    fetchData();
  }, [year]);

  if (loading) return (<p>Loading...</p>);
  if (error) return (<p>Error: {error.message}</p>);   

  return (
    <div className="all">
      <div className="page">
        <div className="main">
          <div className="c1">
            <h2>{year}</h2>
          </div>

          <div className="c2">
        {data.map((item) => (
            <form action="/book" method="GET">
              <div className="book" onClick={(e) => {
                e.preventDefault();
                e.currentTarget.closest("form").submit();
              }}>
                <div className="imgs">
                  <figure>
                    <img src={`${url}covers/${item.cover}`} alt="img" />
                 </figure>
                </div>
                <input type="hidden" name="link" value={item.link}/>
                <p className="month">{item.month}</p>
                <h3 className="title">{item.title}</h3>
              </div>
            </form>
        ))}
          </div>

          <div className="c3">
            <div className="prev">
              <button onClick={() => prevYear()}>
                <h4>
                  {year - 1}
                  <svg xmlns="http://www.w3.org/2000/svg" className="ionicon" viewBox="0 0 512 512">
                    <path d="M321.94 98L158.82 237.78a24 24 0 000 36.44L321.94 414c15.57 13.34 39.62 2.28 39.62-18.22v-279.6c0-20.5-24.05-31.56-39.62-18.18z" />
                  </svg>
                </h4>
              </button>
            </div>
            <div className="next">
              <button onClick={() => nextYear()}>
                <h4>
                  {year + 1}
                  <svg xmlns="http://www.w3.org/2000/svg" className="ionicon" viewBox="0 0 512 512">
                    <path d="M190.06 414l163.12-139.78a24 24 0 000-36.44L190.06 98c-15.57-13.34-39.62-2.28-39.62 18.22v279.6c0 20.5 24.05 31.56 39.62 18.18z" />
                  </svg>
                </h4>
              </button>
            </div>
          </div>

        </div>
      </div>
    </div>
  );
}

