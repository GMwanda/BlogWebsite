<?php

namespace App\Filament\Resources\CommentResource\Widgets;

use App\Filament\Resources\CommentResource;
use App\Models\Comment;
use Filament\Actions\Action;
use Filament\Tables;
use Filament\Tables\Actions\Action as ActionsAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestCommentWidget extends BaseWidget
{
    protected static ?string $heading = 'Comments from the last 100 Days';

    protected int | string | array $columnSpan = 'full';
    public function table(Table $table): Table
    {
        return $table
            ->query(
                Comment::whereDate('created_at', '>', now()->subDays(100)->startOfDay())
            )
            ->columns([
                TextColumn::make('user.name'),
                TextColumn::make('post.title'),
                TextColumn::make('comment'),
                TextColumn::make('created_at')->date()->sortable()
            ])
            ->actions([
                ActionsAction::make('View')->url(fn (Comment $record): string => CommentResource::getUrl('edit', ['record' => $record])),
                // Tables\Actions\DeleteAction::make(),
            ]);
    }
}
