import axios from "axios";

import { useEffect, useState } from "react";

export default function Counter()
{
    const [counter,setCounter] = useState([]);

    useEffect(() => {
        const fetchData = async () => {
            const {data} = await axios.get('/api/daily')
            setCounter(data.count)
        }

        fetchData();
    },[])

    const postData = async() => {
        const {data} = await axios.post('/api/daily')
        setCounter(data.count)
    }

    return (
        <div className="grid h-screen place-items-center">
            <div className="flex flex-col">
                <h1 className="text-center text-5xl">{counter}</h1>
                <label className="text-4xl">Clicks for today</label>
                <button onClick={postData} className="mt-5 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Click me
                </button>
            </div>
        </div>
    );
}
