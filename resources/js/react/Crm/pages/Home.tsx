import { Head } from "@inertiajs/react";
import React from "react";

export default function Page() {

    const doThis = () => {
        console.log('haha');
    }

    return (
        <>
            <Head title="React Home"></Head>
            <div className="">
                React CRM Home

                <button onClick={doThis} className="border">Click me</button>

            </div>
        </>
    )
}
