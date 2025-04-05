// import MainToggleAppearance from '@/components/appearance/main-toggle-appearance';
// import NormalButton from '@/components/button/normal-button';
// import NormalLink from '@/components/link/normal-link';
// import PrimaryLink from '@/components/link/primary-link';
// import SecondaryLink from '@/components/link/secondary-link';
// import PrimaryLogout from '@/components/logout/primary-logout';
// import EmphasizeText from '@/components/text/emphasize-text';
// import { cn } from '@/lib/utils';
// import { UserModelType } from '@/types/models';
import { UserModelType } from '@/react/types/models';
import ToggleAppearance from '@/react/default/components/ToggleAppearance';
import { Link, usePage } from '@inertiajs/react';
import { Archive, ChartBarStacked, CircleX, Menu, Search, ShoppingBag, ShoppingCart } from 'lucide-react';
import { ReactNode, useCallback, useMemo, useState } from 'react';
import { cn } from '@/react/lib/utils';

export default function Header() {
    const { auth } = usePage<{ auth: { user: UserModelType } }>().props;

    const [openMenu, setOpenMenu] = useState(false);

    const toggleOpenMenu = useCallback(() => {
        setOpenMenu(!openMenu);
    }, [openMenu]);

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
