import { Moon, Sun } from 'lucide-react';
import { useCallback } from 'react';
import { useAppearance } from '@/react/hooks/use-appearance';
import { cn } from '@/lib/utils';

export default function ToggleAppearance() {
    const { appearance, updateAppearance } = useAppearance();

    const toggleAppearnece = useCallback(() => {
        if (appearance == 'dark') {
            updateAppearance('light');
        } else {
            updateAppearance('dark');
        }
    }, [appearance]);

    return (
        <button
            type="button"
            onClick={toggleAppearnece}
            className={cn('flex w-12 cursor-pointer items-center gap-1 rounded-full border px-1 py-0.5', {
                'justify-start': appearance == 'light',
                'justify-end': appearance == 'dark',
            })}
        >
            <Moon
                className={cn('animate-in slide-in-from-left size-5', {
                    hidden: appearance == 'light',
                })}
            />
            <Sun
                className={cn('animate-in slide-in-from-right size-5', {
                    hidden: appearance == 'dark',
                })}
            />
        </button>
    );
}
