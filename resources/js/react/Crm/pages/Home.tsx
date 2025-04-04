import { Head } from "@inertiajs/react";
import React from "react";

export default function Page() {

    const doThis = () => {
        console.log('haha');
    }

    return (
        <>
            <Head title="React Home"></Head>
            <div className="flex flex-col items-start p-4">
                <h2 className="text-xl">React CRM Home</h2>
                <button onClick={doThis} className="border p-2 bg-blue-50">Click me</button>
            </div>
        </>
    )
}
