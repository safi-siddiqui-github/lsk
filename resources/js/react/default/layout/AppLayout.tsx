import Header from "@/react/default/components/Header";

export default function AppLayout({ children }) {
    return (
        <div className="">
            <Header />

            {children}
        </div>
    )
}