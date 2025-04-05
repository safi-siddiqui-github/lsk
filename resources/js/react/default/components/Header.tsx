// import MainToggleAppearance from '@/components/appearance/main-toggle-appearance';
import { UserModelType } from '@/react/types/models';
import ToggleAppearance from '@/react/default/components/ToggleAppearance';
import { usePage } from '@inertiajs/react';
import { cn } from '@/react/lib/utils';

export default function Header() {
    const { auth } = usePage<{ auth: { user: UserModelType } }>().props;

    return (
        <header className='flex items-center justify-between py-2 px-4 border-b'>
            <h2 className="text font-medium text-lg">
                <a href={route('home')}>Safi Siddiqui</a>
            </h2>

            <div className="flex gap-2 items-center">
                <ToggleAppearance />

                <div
                    className={cn('', {
                        hidden: auth?.user,
                        flex: !auth?.user,
                    })}
                >
                    Login
                    {/* <PrimaryLink href={route('login')}>Login</PrimaryLink> */}
                </div>

                <div
                    className={cn('', {
                        hidden: !auth?.user,
                        flex: auth?.user,
                    })}
                >
                    {/* <PrimaryLogout /> */}
                    logout
                </div>

            </div>

        </header>
    );
}
