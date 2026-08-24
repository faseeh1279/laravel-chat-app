import { useEffect, useState } from 'react'
import heroImg from './assets/hero.png'
import reactLogo from './assets/react.svg'
import viteLogo from './assets/vite.svg'
import './App.css'
import Chat from './Chat'
import api from "./api/axios";

async function testSanctum() {
    try {
        await api.get("/sanctum/csrf-cookie");

        console.log("CSRF cookie received");
    } catch (error) {
        console.error("Sanctum error:", error);
    }
}


function App() {
  const [count, setCount] = useState(0)
   useEffect(() => {

        api.get("/sanctum/csrf-cookie")
            .then(() => {
                console.log("CSRF cookie received successfully");
            })
            .catch((error) => {
                console.error("Sanctum error:", error);
            });

    }, []); 
  return (
    <>
       <div>
            Laravel Sanctum Test
        </div>
    </>
  )
}

export default App
