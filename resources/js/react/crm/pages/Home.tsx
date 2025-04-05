import AppLayout from "@/react/default/layout/AppLayout";
import { Head } from "@inertiajs/react";

export default function Page() {

    const doThis = () => {
        console.log('haha');
    }

    return (
        <>
            <Head title="React Home"></Head>
            <AppLayout>
                <div className="flex flex-col items-start p-4">
                    <h2 className="text-xl">React CRM Home</h2>
                    <button onClick={doThis} className="border p-2 bg-blue-50">Click me</button>
                </div>
            </AppLayout>
        </>
    )
}
